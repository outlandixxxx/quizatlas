export interface Major {
  id: number;
  name: string;
  slug: string;
  description: string | null;
  is_active: boolean;
}

export interface MajorPayload {
  name: string;
  description?: string | null;
  is_active?: boolean;
}