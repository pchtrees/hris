<template>
  <div>
    <UserLayout>
      <template #header>
        <Header :username="$page.props.auth.user.name"/>
      </template>
    </UserLayout>
  </div>
</template>

<script>
import Header from './Components/Header.vue';
import UserLayout from './Layout/UserLayout.vue';

export default {
  components: {
    UserLayout,
    Header,
  },
};
</script>
