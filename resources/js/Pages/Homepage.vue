<template>
    <guest-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Homepage
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <welcome />
                </div>
            </div>
        </div>
    </guest-layout>
</template>

<script>
    import GuestLayout from '@/Layouts/GuestLayout'
    import Welcome from "@/Jetstream/Welcome";

    export default {
        components: {
            GuestLayout,
            Welcome,
        },
        mounted() {
            console.log(process.env.MIX_APP_NAME)
        }
    }
</script>
