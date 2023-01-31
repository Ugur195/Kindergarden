var GardenData = [
    {
        id: 1,
        name: "Bagca",
        maps: "Binəqədi rayonu",
        img: "http://kindergarden.az/frontendCssJs/asset/images/Rectangle%2016%20(3).png",
    },
    {
        id: 2,
        name: "Bagca",
        maps: "Nərimanov rayonu",
        img: "http://kindergarden.az/frontendCssJs/asset/images/Rectangle%2016%20(3).png",
    },
    {
        id: 3,
        name: "Bagca",
        maps: "Nəsimi rayonu",
        img: "http://127.0.0.1:5502/asset/images/Rectangle%2016%20(8).png",
    },
    {
        id: 4,
        name: "Bagca",
        maps: "Suraxanı rayonu",
        img: "http://127.0.0.1:5502/asset/images/Rectangle%2016%20(8).png",
    },
    {
        id: 5,
        name: "Bagca",
        maps: "Suraxanı rayonu",
        img: "http://127.0.0.1:5502/asset/images/Rectangle%2016%20(8).png",
    },
    {
        id: 6,
        name: "Bagca",
        maps: "Yasamal  rayonu",
        img: "http://127.0.0.1:5502/asset/images/Rectangle%2016%20(8).png",
    },
    {
        id: 7,
        name: "Bagca",
        maps: "Pirallahı  rayonu",
        img: "http://127.0.0.1:5502/asset/images/Rectangle%2016%20(8).png",
    },
    {
        id: 8,
        name: "Bagca",
        maps: "Yasamal    rayonu",
        img: "http://127.0.0.1:5502/asset/images/Rectangle%2016%20(8).png",
    },
    {
        id: 9,
        name: "Bagca",
        maps: "Xəzər   rayonu",
        img: "http://127.0.0.1:5502/asset/images/Rectangle%2016%20(8).png",
    },
    {
        id: 11,
        name: "Bagca",
        maps: "Səbail    rayonu",
        img: "http://127.0.0.1:5502/asset/images/Rectangle%2016%20(8).png",
    },
    {
        id: 12,
        name: "Bagca",
        maps: "Binəqədi   rayonu",
        img: "http://127.0.0.1:5502/asset/images/Rectangle%2016%20(8).png",
    },
    {
        id: 13,
        name: "Bagca",
        maps: "Xətai   rayonu",
        img: "http://127.0.0.1:5502/asset/images/Rectangle%2016%20(8).png",
    },
];

GardenData.forEach((data) => {
    if (data != null) {
        let output_data = "";
        output_data += `
    <div class="garden_data">
    <div class="garden_image">
      <img src=${data.img} alt=${data.name} />
    </div>
    <div class="garden_items">
      <h4>${data.name}</h4>
      <h6>${data.maps}</h6>
    </div>
    </div>
    `;
        let element = document.querySelector(".garden_item");
        let new_element = document.createElement("div");
        new_element.classList.add("col-lg-4");
        new_element.innerHTML = output_data;
        element.appendChild(new_element);
    }
});


const InputValue = document.getElementById("data_id");
InputValue.addEventListener("keyup", (e) => {
    e.preventDefault();
    let InputItem = document.getElementById("data_id");
    let FilterData = InputItem.value.toLowerCase();
    let ListItem = document.querySelectorAll(".bagca_item");
    let element = document.querySelector(".garden_item");
    element.innerHTML = ``;
    GardenData.filter((data) => {
        if (data.maps.toLocaleLowerCase().includes(FilterData)) {
            let output_data = "";
            output_data += `
    <div class="garden_data">
    <div class="garden_image">
      <img src=${data.img} alt=${data.name} />
    </div>
    <div class="garden_items">
      <h4>${data.name}</h4>
      <h6>${data.maps}</h6>
    </div>
    </div>
    `;
            let new_element = document.createElement("div");
            new_element.classList.add("col-lg-4");
            new_element.innerHTML = output_data;
            element.appendChild(new_element);
        }
    });
    ListItem.forEach((data) => {
        let text = data.textContent;
        if (text.toLowerCase().includes(FilterData.toLowerCase())) {
            data.style.display = "";
        } else {
            data.style.display = "none";
            console.log("none");
        }
    });
});
