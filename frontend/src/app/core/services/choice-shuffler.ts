import { isPlatformServer } from '@angular/common';
import { Injectable, PLATFORM_ID, TransferState, inject, makeStateKey } from '@angular/core';

@Injectable({ providedIn: 'root' })
export class ChoiceShuffler {
  private readonly transferState = inject(TransferState);
  private readonly server = isPlatformServer(inject(PLATFORM_ID));

  shuffle<T>(choices: readonly T[], questionKey: string): T[] {
    const key = makeStateKey<number[]>(`choice-order:${questionKey}`);
    let order = this.transferState.get(key, []);
    this.transferState.remove(key);

    // Reuse the server's permutation during hydration. Only positions are
    // transferred; the choice IDs and content stay in the existing API data.
    if (
      order.length !== choices.length ||
      new Set(order).size !== choices.length ||
      order.some((index) => !Number.isInteger(index) || index < 0 || index >= choices.length)
    ) {
      order = choices.map((_, index) => index);
      for (let index = order.length - 1; index > 0; index--) {
        const other = Math.floor(Math.random() * (index + 1));
        [order[index], order[other]] = [order[other], order[index]];
      }
    }

    if (this.server) this.transferState.set(key, order);
    return order.map((index) => choices[index]);
  }
}
