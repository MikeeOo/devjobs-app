import * as Yup from "yup";

export const loginSchema = Yup.object().shape({
    email: Yup.string().email().required(),
    currentPassword: Yup.string().min(6).max(10).required(),
})

export const registerSchema: object = Yup.object().shape({
    email: Yup.string().email().required(),
    newPassword: Yup.string().min(6).max(10).required(),
    confirmNewPassword: Yup.string().oneOf([Yup.ref(`newPassword`)]).required(),
})
