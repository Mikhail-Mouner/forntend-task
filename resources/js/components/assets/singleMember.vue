<template>
    <div class="col">
        <div class="card radius-15">
            <div class="card-body text-center">
                <div class="p-4 border radius-15">
                    <img :src="member.avatar" width="110" height="110" class="rounded-circle shadow" :alt="member.name">
                    <h5 class="mb-0 mt-5">{{ member.name }}</h5>
                    <p class="mb-3">{{ member.title }}</p>
                    <div class="list-inline contacts-social mt-3 mb-3"> <a href="javascript:;" class="list-inline-item bg-facebook text-white border-0"><i class="bx bxl-facebook"></i></a>
                        <a href="javascript:;" class="list-inline-item bg-twitter text-white border-0"><i class="bx bxl-twitter"></i></a>
                        <a href="javascript:;" class="list-inline-item bg-linkedin text-white border-0"><i class="bx bxl-linkedin"></i></a>
                    </div>
                    <div class="d-grid"> <a href="#" class="btn btn-outline-primary radius-15">Contact Me</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        props: ["member"],
    };
</script>