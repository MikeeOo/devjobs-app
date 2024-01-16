export const handleErrors = () =>
    document
        .querySelectorAll("input, textarea")
        .forEach((htmlElement) =>
            htmlElement.addEventListener("keyup", (e) => (e.target.nextSibling ? e.target.nextSibling.remove() : null)),
        );
