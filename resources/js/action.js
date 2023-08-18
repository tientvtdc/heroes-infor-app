import api from "./api";
import L from 'leaflet';
import { markers } from "./search";

const showInformation = async (id, map) => {
    console.log(id, map);
    const martyrsInformationBlock = document.querySelector('.__martyrs-information-block');
    const respon = await api.get('/martyrs/' + id);
    console.log(respon.data);
    martyrsInformationBlock.innerHTML = /*html*/`
        <h2 class="text-lg text-blue-600 mt-6">Liệt sỹ <span class="font-semibold text-xl">${respon.data.full_name}</span></h2>
        <p  class="mt-4">Ngày sinh: <span class="font-semibold">${respon.data.date_of_birth}</span></p>
        <p>Hy sinh: <span class="font-semibold">${respon.data.date_of_sacrifice}</span></p>
        <p>Cấp bậc: <span class="font-semibold">${respon.data.rank}</span></p>
        <p>Chức vụ: <span class="font-semibold">${respon.data.position}</span></p>
    `;
    markers.clearLayers();
    const marker = L.marker([45.71847558442443, 22.929689884185795]).addTo(map);
    marker.bindPopup("Đây là phần mộ của Liệt sỹ "+respon.data.full_name);

    // Thêm popup (cửa sổ thông tin) khi nhấp vào marker
    marker.on('click', function () {
        marker.openPopup();
    });
    map.flyTo([45.71847558442443, 22.929689884185795], 3, {
        duration: 1,  // Thời gian animation (giây)
        easeLinearity: 0.25 // Điều chỉnh mức độ mượt mà của animation
    });
}

export default showInformation;