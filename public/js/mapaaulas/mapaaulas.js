const filterContainer = document.querySelector(".gallery-filter"),
            galleryItems = document.querySelectorAll(".gallery-item");
           
            filterContainer.addEventListener("click", (event) =>{
              if(event.target.classList.contains("filter-item")){
                   // desativa o active 'filter-item'
                   filterContainer.querySelector(".active").classList.remove("active");
                   // ativa'filter-item'
                   event.target.classList.add("active");
                   const filterValue = event.target.getAttribute("data-filter");
                   galleryItems.forEach((item) =>{
                  if(item.classList.contains(filterValue)){
                      item.classList.remove("hide");
                       item.classList.add("show");
                  }
                  else{
                      item.classList.remove("show");
                      item.classList.add("hide");
                  }
                   });
              }
            });