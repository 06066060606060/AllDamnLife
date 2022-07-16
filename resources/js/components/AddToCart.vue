<template>
          <!-- "/addtocart/{{ $produit->id }}" -->
  <button name="myButton" class="px-2 py-2 mt-4 mb-3 transition-colors duration-150 rounded w-36 bg-violet-800 hover:bg-emerald-300 hover:text-violet-800" 
   v-on:click.prevent="addToCart" >Ajouter au panier</button>
</template>

<script setup>
const produitId = defineProps(['produitId'])
const addToCart = () => {
console.log(produitId);
}
</script>