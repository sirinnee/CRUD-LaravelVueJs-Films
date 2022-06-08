<template>
<div class="container">
<menu />
<router-view> </router-view>
</div>
</template>
<script>
import menu from './menu'
export default {
components: {
menu
}
}
</script>
