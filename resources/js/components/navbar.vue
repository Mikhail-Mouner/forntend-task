<template>
    <div>
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title text-center mb-4 pb-2">
                    <h4 class="title mb-4">Our Features</h4>
                    <p class="text-muted para-desc mx-auto mb-0">There is now an abundance of readable dummy texts.
                        These are usually used when a text is required purely to fill a space.</p>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <nav>
            <h4>
                <router-link :to="{ name: 'home' }" class="btn btn-outline-primary radius-15" active-class="btn-primary text-white">Home</router-link>
                <router-link :to="{ name: 'stories' }" class="btn btn-outline-primary radius-15" active-class="btn-primary text-white">Stories</router-link>
            </h4>
        </nav>
    </div>
</template>
<script>
    export default {};
</script>