const txtInput = document.querySelector(".inputs input"),
checkBtn = document.querySelector(".inputs button"),
infoTxt = document.querySelector(".info-txt");
let filterInput;
let reverseInput;

checkBtn.addEventListener("click", () => {
    // splitting user input charcters, reversing them,
    // and join them in a single word !

    let reverseInput = filterInput.split("").reverse().join();

    infoTxt.style.display = "block";
    if (filterInput != reverseInput){
        return infoTxt.innerHTML = `No, <span> ${txtInput.value}</span> is not a palindrome !`;
    }

    infoTxt.innerHTML = `YES, <span> ${txtInput.value} </span> is a palindrome !`;
});

txtInput.addEventListener("keyup", () => {

    //removing spaces & all special characters from entered value
    let filterInput = txtInput.value.toLowerCase().replace(/[^A-Z0-9]/ig, "");

    if (filterInput) {
        return checkBtn.classList.add("active");
    }

    infoTxt.style.display = "none";
    checkBtn.classList.remove("active")
});