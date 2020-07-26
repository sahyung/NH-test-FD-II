<template>
  <div class="row">
    <div class="col-md-3 col-sm-6">
      <strong class="footer-list-title text-uppercase">HUBUNGI KAMI</strong>
      <address>
        <span class="display-block">0274-5305505</span>
        <span class="display-block">Senin - Minggu</span>
        <span class="display-block">24 Jam Nonstop</span>
      </address>
      <address>
        Jl. Selokan Mataram Monjali Karangjati MT I/304 RT 019 RW 042 Sindudadi
        Mlati Sleman
      </address>
    </div>
    <div class="col-md-3 col-sm-6">
      <strong class=" footer-list-title ">LAYANAN</strong>
      <ul class="footer-link-list">
        <li
          class="footer-link-list__item"
          v-for="(elem, idx) in list.niagaServices"
          :key="`niaga_${idx}`"
        >
          <a :href="elem.url || '#'">
            {{ elem.text }}
          </a>
        </li>
      </ul>
    </div>
    <div class="col-md-3 col-sm-6">
      <strong class="footer-list-title ">SERVICE HOSTING</strong>
      <ul class="footer-link-list">
        <li
          class="footer-link-list__item"
          v-for="(elem, idx) in list.hostingServices"
          :key="`hosting_${idx}`"
        >
          <a :href="elem.url || '#'">
            {{ elem.text }}
          </a>
        </li>
      </ul>
    </div>
    <div class="col-md-3 col-sm-6">
      <strong class="footer-list-title ">TUTORIAL</strong>
      <ul class="footer-link-list">
        <li
          class="footer-link-list__item"
          v-for="(elem, idx) in list.tutorial"
          :key="`tutorial_${idx}`"
        >
          <a :href="elem.url || '#'">
            {{ elem.text }}
          </a>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
import tutorialList from '@json/footer/tutorial.json';

export default {
  data() {
    return {
      list: {
        hostingServices: [],
        niagaServices: [],
        tutorial: tutorialList,
      },
    };
  },
  created() {
    this.getHostingServices();
    this.getNiagaServices();
  },
  methods: {
    getHostingServices() {
      axios.get('api/hosting-services').then((resp) => {
        this.list.hostingServices = resp.data;
      });
    },
    getNiagaServices() {
      axios.get('api/niaga-services').then((resp) => {
        this.list.niagaServices = resp.data;
      });
    },
  },
};
</script>
