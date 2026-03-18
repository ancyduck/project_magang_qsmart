import './sidebar';

// Data keranjang
let cart = [];

// Tambah ke keranjang
window.tambahKeranjang = function(nama, harga){
    let item = cart.find(i => i.nama === nama);

    if (item) {
        item.qty++;
    } else {
        cart.push({ nama, harga, qty: 1 });
    }

    renderCart();
};

// Render keranjang
function renderCart(){
    const container = document.getElementById('cartItems');
    if (!container) return;

    container.innerHTML = "";

    let subtotal = 0;

    cart.forEach((item, i) => {
        subtotal += item.harga * item.qty;

        container.innerHTML += `
            <div class="flex justify-between items-center">
                <span>${item.nama} x${item.qty}</span>
                <span>${formatRupiah(item.harga * item.qty)}</span>
            </div>
        `;
    });

    let tax = subtotal * 0.1;
    let total = subtotal + tax;

    const subtotalEl = document.getElementById('subtotal');
    const taxEl = document.getElementById('tax');
    const totalEl = document.getElementById('total');

    if(subtotalEl) subtotalEl.innerText = formatRupiah(subtotal);
    if(taxEl) taxEl.innerText = formatRupiah(tax);
    if(totalEl) totalEl.innerText = formatRupiah(total);
}

// Tambah qty
window.tambah = function(i){
    cart[i].qty++;
    renderCart();
}

// Kurang qty
window.kurang = function(i){
    cart[i].qty--;
    if(cart[i].qty <= 0){
        cart.splice(i,1);
    }
    renderCart();
}

// Hapus item
window.hapus = function(i){
    cart.splice(i,1);
    renderCart();
}

// Bayar
window.bayar = function(){
    if(cart.length === 0){
        alert("Keranjang kosong!");
        return;
    }

    alert("Pembayaran berhasil!");
    cart = [];
    renderCart();
}

// Format rupiah
function formatRupiah(angka){
    return "Rp " + angka.toLocaleString("id-ID");
}

// Search produk
window.searchProduk = function(){
    let input = document.getElementById("search");
    if(!input) return;

    let keyword = input.value.toLowerCase();
    let cards = document.querySelectorAll(".produk-card");

    cards.forEach(card=>{
        let text = card.innerText.toLowerCase();
        card.style.display = text.includes(keyword) ? "block" : "none";
    });
}

// Filter kategori
window.filterKategori = function(){
    let select = document.getElementById("kategoriFilter");
    if(!select) return;

    let kategori = select.value;
    let cards = document.querySelectorAll(".produk-card");

    cards.forEach(card=>{
        let cat = card.dataset.kategori;

        if(kategori === "all" || cat === kategori){
            card.style.display = "block";
        }else{
            card.style.display = "none";
        }
    });
}