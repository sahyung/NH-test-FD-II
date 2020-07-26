<template>
  <div class="row m-top-40">
    <div class="col-md-12">
      <strong class="footer-list-title m-bottom-10">PEMBAYARAN</strong>
      <ul class="payment-list">
        <li
          class="payment-list__item"
          v-for="(elem, idx) in list.payments"
          :title="elem.id"
          :key="`payment_${idx}`"
        >
          <img class="payment__image" :src="elem.url | imageUrl" />
        </li>
      </ul>
      <p class="m-top-20 footer-activation">
        Aktivasi instan dengan E-Payment. Hosting dan Domain langsung aktif!
      </p>
      <hr class="" />
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      list: {
        payments: [],
      },
    };
  },
  created() {
    this.getPayments();
  },
  methods: {
    getPayments() {
      axios.get('api/payment-list').then((resp) => {
        this.list.payments = resp.data;
      });
    },
  },
};
</script>
