export const handleErrors = () =>
    document
        .querySelectorAll("input, textarea")
        .forEach((htmlElement) =>
            htmlElement.addEventListener("keyup", (e) => (e.target.nextSibling ? e.target.nextSibling.remove() : null)),
        );

export const handleFlashMessage = () => {
    const flash = document.getElementById("flash");
    const closeBtn = document.getElementById("flash-close");
    const counter = document.getElementById("counter");
    let count = +counter.innerText.split("")[1];

    const interval = setInterval(() => {
        if (!count) {
            flash.setAttribute("hidden", "true");
            clearInterval(interval);
        } else {
            count--;
            counter.innerText = `0${count}...`;
        }
    }, 1000);

    closeBtn.addEventListener(`click`, () => {
        flash.setAttribute("hidden", "true");
        count = 0;
    });
};
