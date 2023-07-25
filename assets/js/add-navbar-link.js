addEventListener("turbo:load", () => {
    initNavLinkAdd();
    addRemoveBtn();
})

addEventListener("DOMContentLoaded", () => {
    initNavLinkAdd();
    addRemoveBtn();
})

function initNavLinkAdd() {
    function addNavbarLink() {
        let proto = document.getElementById("navbar_block_links").getAttribute("data-prototype");
        let holder = document.getElementById("dynamic-content-block");

        let input = document.createElement("div");
        input.innerHTML = proto;

        holder.append(input);
        document.getElementById("navbar_block_links___name__").id = "navbar_block_links_" + holder.querySelectorAll("fieldset").length;
        input.querySelector("#navbar_block_links_" + holder.querySelectorAll("fieldset").length) += `<div onclick='this.parentNode.remove()' class='btn btn-danger'><span style='font-size: 20px'>&times; supprimer</span></div>`;

        let inputs = input.querySelectorAll("input, textarea, select");

        for (let i = 0; i < inputs.length; i++) {
            inputs[i].setAttribute("name", inputs[i].getAttribute("name").replace("__name__", holder.querySelectorAll("fieldset").length));
            inputs[i].id = inputs[i].getAttribute("id").replace("__name__", holder.querySelectorAll("fieldset").length);
        }
    }

    let btn = document.getElementById("navbar_block_add_link");

    if (btn) {
        btn.onclick = () => {
            addNavbarLink();
        }
    }
}

function addRemoveBtn() {
    for (let i = 0; i < 100; i++) {
        if (document.getElementById("navbar_block_links_" + i) && !document.getElementById("remove-btn-" + i)) {
            let removeBtn = document.createElement("div");
            removeBtn.id = "remove-btn-" + i;
            removeBtn.innerHTML = `<div onclick='this.parentNode.parentNode.parentNode.remove()' class='btn btn-danger'><span style='font-size: 20px'>&times; supprimer</span></div>`;
            document.getElementById("navbar_block_links_" + i).append(removeBtn);
        }
    }
}