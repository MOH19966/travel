<template>
   <div class="comments-outside">
    <div class="comments-header">
        <div class="comments-stats">
            <span><i class="fa fa-thumbs-up"></i> [[ likes ]]</span>
            <span><i class="fa fa-comment"></i> [[ comments.length ]]</span>
        </div>
        <div class="project-owner">
            <div class="avatar">
                <img :src="creator.avatar" alt="">
            </div>
            <div class="username">
                <a href="#">@[[ creator.user ]]</a>
            </div>
        </div>
    </div>
    <comments 
        :comments_wrapper_classes="['custom-scrollbar', 'comments-wrapper']"
        :comments="comments"
        :current_user="current_user"
        @submit-comment="submitComment"
    ></comments>
</div>
</template>

<script>
export default {

data() {
    return {
        comment: ''
    }
},


}
</script>