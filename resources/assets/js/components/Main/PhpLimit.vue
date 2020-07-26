<template>
  <section class="main-hostingbenefits">
    <div class="container">
      <section class="row main-benefits__row">
        <div class="col-md-12 text-center">
          <h2 class="text-montserrat-light">
            Powerful dengan limit PHP yang lebih besar
          </h2>
        </div>
        <div class="col-md-6 main-benefits__benefits">
          <ul class="benefit-list">
            <li
              class="benefit-list__item"
              v-for="(hostingBenefit, idx) in list.phpLimit.slice(0, 3)"
              :key="`benefit_col1_${idx}`"
            >
              <i
                class="fa list-icon"
                :class="
                  hostingBenefit.checked
                    ? ['fa-check-circle', 'text-success']
                    : ['fa-close-circle', 'text-danger']
                "
              ></i>
              <span class="text-center list-text">
                {{ hostingBenefit.text }}
              </span>
            </li>
          </ul>
        </div>
        <div class="col-md-6 main-benefits__benefits">
          <ul class="benefit-list">
            <li
              class="benefit-list__item"
              v-for="(hostingBenefit, idx) in list.phpLimit.slice(3, 6)"
              :key="`benefit_col2_${idx}`"
            >
              <i
                class="fa list-icon"
                :class="
                  hostingBenefit.checked
                    ? ['fa-check-circle', 'text-success']
                    : ['fa-close-circle', 'text-danger']
                "
              ></i>
              <span class="text-center list-text">
                {{ hostingBenefit.text }}
              </span>
            </li>
          </ul>
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
        phpLimit: [],
      },
    };
  },
  created() {
    this.getPhpLimit();
  },
  methods: {
    getPhpLimit() {
      axios.get('api/php-limit').then((resp) => {
        this.list.phpLimit = resp.data;
      });
    },
  },
};
</script>
