<template>
  <div class="col-md-3 col-sm-6">
    <strong class="footer-list-title ">KENAPA PILIH NIAGAHOSTER?</strong>
    <ul class="footer-link-list">
      <li
        class="footer-link-list__item"
        v-for="(elem, idx) in list.excellences"
        :key="`excellences_${idx}`"
      >
        <a :href="elem.url || '#'">
          {{ elem.text }}
        </a>
      </li>
    </ul>
  </div>
</template>

<script>
import excellencesList from '@json/footer/excellences.json';

export default {
  data() {
    return {
      list: {
        excellences: excellencesList,
      },
    };
  },
  mounted() {},
};
</script>
