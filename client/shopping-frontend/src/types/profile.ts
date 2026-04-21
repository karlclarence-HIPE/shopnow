export interface ProfileRequest {
  id?: number;
  firstName: string;
  lastName: string;
  email: string;
  address: string;
  currentPassword?: string;
  newPassword?: string;
  confirmNewPassword?: string;
}
