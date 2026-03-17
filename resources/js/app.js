let cart=[]

function tambahKeranjang(nama,harga){

let item=cart.find(p=>p.nama===nama)

if(item){
item.qty++
}else{
cart.push({nama,harga,qty:1})
}

renderCart()

}

function renderCart(){

let html=""
let subtotal=0

cart.forEach((item,i)=>{

subtotal+=item.harga*item.qty

html+=`
<div>

${item.nama}

<button onclick="kurang(${i})">-</button>

${item.qty}

<button onclick="tambah(${i})">+</button>

<button onclick="hapus(${i})">🗑</button>

</div>
`

})

document.getElementById("cartItems").innerHTML=html

let tax=subtotal*0.1
let total=subtotal+tax

document.getElementById("subtotal").innerText=subtotal
document.getElementById("tax").innerText=tax
document.getElementById("total").innerText=total

}

function tambah(i){

cart[i].qty++
renderCart()

}

function kurang(i){

cart[i].qty--

if(cart[i].qty<=0) cart.splice(i,1)

renderCart()

}

function hapus(i){

cart.splice(i,1)
renderCart()

}

function bayar(){

alert("Pembayaran berhasil")
cart=[]
renderCart()

}

/* search */

function searchProduk(){

let input=document.getElementById("search").value.toLowerCase()

let cards=document.querySelectorAll(".produk-card")

cards.forEach(card=>{

let text=card.innerText.toLowerCase()

card.style.display=text.includes(input)?"block":"none"

})

}

/* filter */

function filterKategori(){

let kategori=document.getElementById("kategoriFilter").value

let cards=document.querySelectorAll(".produk-card")

cards.forEach(card=>{

let cat=card.dataset.kategori

if(kategori==="all"||cat===kategori){
card.style.display="block"
}else{
card.style.display="none"
}

})

}
