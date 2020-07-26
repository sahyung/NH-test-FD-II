<template>
  <div class="col-md-3 col-sm-6">
    <strong class="footer-list-title ">TENTANG KAMI</strong>
    <ul class="footer-link-list">
      <li
        class="footer-link-list__item"
        v-for="(elem, idx) in list.about"
        :key="`about_${idx}`"
      >
        <a :href="elem.url || '#'">
          {{ elem.text }}
        </a>
      </li>
    </ul>
  </div>
</template>

<script>
import aboutList from '@json/footer/about.json';

export default {
  data() {
    return {
      list: {
        about: aboutList,
      },
    };
  },
  mounted() {},
};
</script>
