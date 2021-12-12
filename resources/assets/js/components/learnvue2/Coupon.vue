<template>
    <div>
        <input type="text" placeholder="enter your coupon code" @blur="onCouponApplied">
    </div>
</template>

<script>
export default {
    data (){
        return {
            couponApplied : false
        }
    },
methods :{
    onCouponApplied (){
       // alert('it was applied'); //het can flash message or update data 
       //we donot have now ajax request but we work als it goed value and emit event
     //  this.$emit('applied');
     this.couponApplied = true;
    }
}
}

</script>
