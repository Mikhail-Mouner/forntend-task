<template>
    <div>
        <div class="single-story">
            <div :class="getStoryClassList">
                <img :src="member.avatar">
                <img v-show="isCurrentUser" src="https://bootdey.com/assets/img/plus.png" class="add-story">
            </div>
            <div class="story-author">
                <p class="name">{{ member.name }}</p>
                <p class="time" v-show="isCurrentUser">Tap to add a story</p>
                <p class="time" v-show="!isCurrentUser">{{ member.last_activity }}</p>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        props: {
            member: {
                type: Object,
                required: true
            },
            isCurrentUser: {
                default: false,
                type: Boolean
            },
            isMemberSeen: {
                default: false,
                type: Boolean
            },
        },
        computed: {
            getStoryClassList() {
                if (this.isCurrentUser) {
                    return "story-dp";
                } else if (this.isMemberSeen) {
                    return ["story-dp", "seen"];
                } else {
                    return ["story-dp", "unseen"];
                }
            },
        },
    };
</script>