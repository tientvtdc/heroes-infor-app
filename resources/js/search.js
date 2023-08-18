import showInformation from "./action";
import api from "./api";
import L from 'leaflet';
import 'leaflet/dist/leaflet.css'; 

var hostname = window.location.hostname;

const southWest = L.latLng(-90, -180); // Góc tây nam
const northEast = L.latLng(90, 180);   // Góc đông bắc
const bounds = L.latLngBounds(southWest, northEast);

const map = L.map('map', {
    minZoom: 1, // Mức độ thu phóng tối thiểu
    maxZoom: 18, // Mức độ thu phóng tối đa
    maxBounds: bounds
}).setView([0, 0], 2);

const imageBounds = [[-90, -180], [90, 180]];
L.imageOverlay(imageUrl, imageBounds).addTo(map);



const searchMartyrs = async (e, listSearchResultBox) => {
    if (listSearchResultBox) {
        const nameText = e.target.value;
        if (nameText.length >= 3) {
            const respon = await api.get(`/martyrs/search?name=${nameText}`);
            console.log(respon);
            const fragment = document.createDocumentFragment();
            respon.data.forEach(el => {
                const button = document.createElement('button');
                button.className = 'cursor-pointer rounded-md bg-white w-full py-2 __item-select-martyrs border-[1px] hover:bg-gray-50';
                button.addEventListener('click', () => {
                    showInformation(el.id,map)
                });
                const h6 = document.createElement('h6');
                h6.className = 'text-gray-600 font-bold text-xl';
                h6.textContent = el.full_name;

                const p = document.createElement('p');
                p.textContent = `Hi sinh: ${el.date_of_sacrifice}`;
                const pHt = document.createElement('p');
                pHt.textContent = `Quê quán: ${el.hometowns}`;

                button.appendChild(h6);
                button.appendChild(p);
                button.appendChild(pHt);

                fragment.appendChild(button); // Thêm button vào fragment
            });

            listSearchResultBox.innerHTML = ''; // Xóa nội dung cũ của listSearchResultBox
            listSearchResultBox.appendChild(fragment); // Thêm fragment vào listSearchResultBox

        } else {
            listSearchResultBox.innerHTML = "";
        }
    }
};

export default searchMartyrs ;
document.addEventListener("DOMContentLoaded", function () {
    console.log("DOM đã được tải xong.");
    const nameInput = document.querySelector(".__input-seach-name");
    const listSearchResultBox = document.querySelector(".__list-search-result");

    nameInput.addEventListener("input", (e) =>
        searchMartyrs(e, listSearchResultBox,map)
    );
});



// Thêm marker (điểm đánh dấu) vào bản đồ
// const marker = L.marker([11.472194091996053, 59.23828125000001]).addTo(map);
// marker.bindPopup("Hello, this is a marker!");

// // Thêm popup (cửa sổ thông tin) khi nhấp vào marker
// marker.on('click', function () {
//     marker.openPopup();
// });
// marker.remove();
// console.log("ok");

map.on('click', function(e) {
    const lat = e.latlng.lat;
    const lng = e.latlng.lng;
    console.log(`Vị trí khi nhấp chuột: Latitude ${lat}, Longitude ${lng}`);
});


export const markers = L.layerGroup().addTo(map);