import { User } from './user';

export interface AuthResponse {
    token(user: User, token: any): unknown;

    user: User;

    access_token: string;

    token_type: string;

    expires_in: number;

}