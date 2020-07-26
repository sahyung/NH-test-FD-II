<template>
  <section class="main-elements">
    <div class="container">
      <div class="row main-elements__row">
        <div
          class="col-md-4 col-sm-6 col-xs-12 main-elements__feature"
          v-for="(feature, idx) in list.heroFeatures"
          :key="'feature' + idx"
        >
          <img class="feature__image" :src="feature.img | svgUrl" />      
  created() {
    this.getHero();
  },
  methods: {
    getHero() {
      axios.get('api/hosting-niaga').then((resp) => {
        this.list.hero = resp.data;
      });
    },
  },
            {{ feature.text }}
          </span>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  data() {
    return {
      list: {
        heroFeatures: [],
      },
    };
  },
  created() {
    this.getHeroFeatures();
  },
  methods: {
    getHeroFeatures() {
      axios.get('api/hero-feature').then((resp) => {
        this.list.hero = resp.data;
      });
    },
  },
};
</script>
