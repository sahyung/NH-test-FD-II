<template>
  <section class="main-bundles">
    <div class="container">
      <section class="row main-bundles__row">
        <div class="col-md-12 text-center">
          <h2 class="text-montserrat-light text-capitalize bundles__title">
            Semua paket hosting sudah termasuk
          </h2>
        </div>
        <div
          class="col-md-4 col-sm-6 main-bundles__item"
          v-for="(bundle, idx) in list.hostingBundles"
          :key="`bundles_${idx}`"
        >
          <div class="display-block text-center">
            <img :src="bundle.img | svgUrl" class="bundle__image" />
          </div>
          <strong class="bundle__title display-block text-center">
            {{ bundle.title }}
          </strong>
          <p class="text-center bundle__description">
            {{ bundle.description }}
          </p>
        </div>
      </section>
    </div>
  </section>
</template>

<script>
export default {
  data() {
    return {
      list: {
        hostingBundles: [],
      },
    };
  },
  created() {
    this.getBundles();
  },
  methods: {
    getBundles() {
      axios.get('api/hosting-bundles').then((resp) => {
        this.list.hostingBundles = resp.data;
      });
    },
  },
};
</script>
