<template>
  <!-- "/addtocart/{{ $produit->id }}" -->
  <button name="myButton"
    class="px-2 py-2 mt-4 mb-3 transition-colors duration-150 rounded w-36 bg-violet-800 hover:bg-emerald-300 hover:text-violet-800"
    v-on:click.prevent="addToCart">Ajouter au panier</button>

</template>

<script setup>
import axios from 'axios';

const data = defineProps(['produitId'])
console.log(myToken.csrfToken);

const addToCart = async () => {
  console.log('add to cart')
  PopupUser()
  axios.post('/addtocart/' + data.produitId, {
    _token: myToken.csrfToken,
    quantite: 1,
  })
    .catch(err => console.log(err));

}

function PopupUser() {
  console.log('popup');
  var updateElement = document.getElementById("pop");
  updateElement.classList.toggle("active");
  setTimeout(() => { updateElement.classList.toggle("active"); }, 500);
  console.log('popup oki');
}

</script>

<style>
#pop {
  position: absolute;
  display: none;
   top: 50vh;
  transform: translateY(-50%);
    left: 50%;
  transform: translateX(-50%);
  z-index: 100;
  background-color: #46515F;
  text-decoration: none;
  transition: 0.25s;
  border-radius: 8px;
  user-select: none;
  overflow: hidden;
}

#pop.active {
  display: block;
  top: 50vh;
  transform: translateY(-50%);
  left: 50%;
  transform: translateX(-50%);
  transition: 0.3s;
  transition: 0.25s;
}


@media (max-width: 640px) {
  #pop.active {
  display: block;
  top: 50vh;
  transform: translateY(-50%);
    left: 50%;
  transform: translateX(-50%);
  transition: 0.3s;
  transition: 0.25s;
  }
}
</style>