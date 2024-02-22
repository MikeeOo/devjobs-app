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

export const imagePreview = () => {
    const imageInput = document.getElementById("logo");
    const showPreview = (e) => {
        const reader = new FileReader();
        reader.onload = () => {
            const img = document.getElementById("image-preview");
            img.src = reader.result;
            img.classList.remove("hidden");
            img.classList.add("block");
        };
        reader.readAsDataURL(e.target.files[0]);
    };
    imageInput.addEventListener("change", showPreview);
};
