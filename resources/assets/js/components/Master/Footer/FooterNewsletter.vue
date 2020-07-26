<template>
  <div class="col-md-3 col-sm-6">
    <strong class="footer-list-title ">newsletter</strong>
    <form>
      <fieldset class="footer-newsletter-form">
        <div class="input-wrapper">
          <input type="email" placeholder="Email" v-model="subscribe" />
          <button
            type="button"
            name="subscribeButton"
            class="btn btn-primary btn-niaga  btn-padding-xs btn-normaltext"
          >
            Berlangganan
          </button>
        </div>
      </fieldset>
      <p class="footer-newsletter m-top-10">
        Dapatkan promo dan konten terbaik dari penyedia hosting favorit Anda.
      </p>
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      subscribe: '',
    };
  },
  mounted() {},
};
</script>
