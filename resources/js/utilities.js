export const handleErrorsInputs = () =>
    document
        .querySelectorAll("input")
        .forEach((input) =>
            input.addEventListener("keyup", (e) => (e.target.nextSibling ? e.target.nextSibling.remove() : null)),
        );
