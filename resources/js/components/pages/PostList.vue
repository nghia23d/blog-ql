<template>
  <div>PostList</div>
</template>

<script>
import gql from "graphql-tag";

export default {
  apollo: {
    // Simple query that will update the 'hello' vue property
    posts: gql`
      {
        posts {
          id
          title
        }
      }
    `,
  },
};
</script>

<style lang="scss" scoped>
</style>