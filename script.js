/* --------------------- PARTIE DROPDOWN ---------------------*/
const dropdowns = document.querySelectorAll(".dropdown")
const toggleVisible = (e) => {
    if (e.target.classList.contains("arrowDown") || e.target.classList.contains("arrowUp")) {
        const displayedBlock = e.target.closest(".dropdown").querySelectorAll("div")[1]
            displayedBlock.classList.toggle("hidden")
            displayedBlock.classList.toggle("visible");
            e.target.classList.toggle("arrowUp");
            e.target.classList.toggle("arrowDown");
    }
}

for (let dropdown of dropdowns) {
    dropdown.addEventListener("click", (e) => toggleVisible(e))
}
/* --------------------- PARTIE CARROUSEL ---------------------*/
const carrouselContainer = document.querySelector("#carrousel")
const imagesList = carrouselContainer.querySelectorAll("img")
const leftArrow = carrouselContainer.querySelector(".arrowLeft")
const rigthArrow = carrouselContainer.querySelector(".arrowRight")
const count = carrouselContainer.querySelector(".count")
let actualPhoto = 0

const calcVisibilityArrow = () =>{
    Math.abs(actualPhoto) === 0 ? leftArrow.style.display="none" : leftArrow.style.display="block"
    Math.abs(actualPhoto) === imagesList.length-1 ? rigthArrow.style.display="none" : rigthArrow.style.display="block"
}
const pageUpdate = () =>{
    count.innerText = `${Math.abs(actualPhoto)+1} / ${imagesList.length}`
}
calcVisibilityArrow()

const navigateCarrousel = (direction) =>{
    actualPhoto += direction
    for(let i = 0 ; i<imagesList.length;i++){
    imagesList[i].style.transform = `translateX(${100 * actualPhoto}%)`
    }
    calcVisibilityArrow()
    pageUpdate()
}
leftArrow.addEventListener("click",()=>navigateCarrousel(1))
rigthArrow.addEventListener("click",()=>navigateCarrousel(-1))
