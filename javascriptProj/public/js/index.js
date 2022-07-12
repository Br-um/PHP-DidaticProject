const menu = document.querySelectorAll(".menu")
const list = document.querySelectorAll(".list")[0]
const item = document.querySelectorAll(".item")
list.style.right = "-1000px"
menu.forEach(e => {
     e.onclick = () => {
          if(list.style.right == "-1000px"){
               list.style.right = "0px"
               e.classList.toggle("act")
               item.forEach(el => {
                    el.style.transition = "1.5s"; 
                    el.style.opacity = "1"
                    el.style.marginRight = "0"
               })
          }else{
               list.style.right = "-1000px"
               e.classList.remove("act")
          }
     }
})
