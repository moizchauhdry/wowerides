<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Head, Link, useForm, usePage } from "@inertiajs/vue3";

import "@vuepic/vue-datepicker/dist/main.css";
import Multiselect from "@vueform/multiselect";
import DangerButton from "@/Components/DangerButton.vue";

const props = defineProps({
    edit_mode: Boolean,
    customer_account: Object,
    product_options: Array,
    service_options: Array,
    selected_products: Array,
    selected_services: Array,
});

const edit_mode = usePage().props.edit_mode;
const customer_account = usePage().props.customer_account;
const selected_products = usePage().props.selected_products;
const selected_services = usePage().props.selected_services;

var payment_method_options = [
    { value: 1, label: "Cash" },
    { value: 2, label: "CC" },
    { value: 3, label: "Paybright/Flexiti/NP #" },
];

var motor_warranty_options = [
    { value: 1, label: "Yes" },
    { value: 0, label: "No" },
];

var frame_warranty_options = [
    { value: 1, label: "Yes" },
    { value: 0, label: "No" },
];

var electronics_warranty_options = [
    { value: 1, label: "Yes" },
    { value: 0, label: "No" },
];

const form = useForm({
    ca_id: customer_account?.id,
    name: customer_account?.name,
    phone_home: customer_account?.phone_home,
    phone_mobile: customer_account?.phone_mobile,
    email: customer_account?.email,
    address: customer_account?.address,
    city: customer_account?.city,
    province: customer_account?.province,
    postal_code: customer_account?.postal_code,
    products: selected_products,
    services: selected_services,
    payment_method: customer_account?.payment_method,
    motor_warranty: customer_account?.motor_warranty,
    frame_warranty: customer_account?.frame_warranty,
    electronics_warranty: customer_account?.electronics_warranty,
    comments: customer_account?.comments,
});

const submit = () => {
    form.post(route("customer-account.update"));
};
</script>

<style src="@vueform/multiselect/themes/default.css"></style>

<template>
    <Head
        :title="edit_mode ? 'Edit Customer Account' : 'Create Customer Account'"
    />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ edit_mode ? "Edit" : "Create" }} Customer Account
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <form @submit.prevent="submit()">
                            <h4 class="text-2xl font-bold text-center">
                                Customer Information
                            </h4>
                            <hr
                                class="w-48 h-1 mx-auto bg-gray-100 border-0 rounded dark:bg-gray-700"
                            />

                            <div
                                class="grid gap-4 lg:grid-cols-3 md:grid-cols-2 grid-rows-1 my-5"
                            >
                                <div>
                                    <InputLabel for="name" value="Full Name" />

                                    <TextInput
                                        id="name"
                                        type="text"
                                        class="mt-1 block w-full"
                                        v-model="form.name"
                                    />

                                    <InputError
                                        class="mt-2"
                                        :message="form.errors.name"
                                    />
                                </div>

                                <div>
                                    <InputLabel
                                        for="phone_home"
                                        value="Phone Number - Home"
                                    />

                                    <TextInput
                                        id="phone_home"
                                        type="text"
                                        class="mt-1 block w-full"
                                        v-model="form.phone_home"
                                    />

                                    <InputError
                                        class="mt-2"
                                        :message="form.errors.phone_home"
                                    />
                                </div>

                                <div>
                                    <InputLabel
                                        for="phone_mobile"
                                        value="Phone Number - Cellular"
                                    />

                                    <TextInput
                                        id="phone_mobile"
                                        type="text"
                                        class="mt-1 block w-full"
                                        v-model="form.phone_mobile"
                                    />

                                    <InputError
                                        class="mt-2"
                                        :message="form.errors.phone_mobile"
                                    />
                                </div>

                                <div>
                                    <InputLabel for="email" value="Email" />

                                    <TextInput
                                        id="email"
                                        type="text"
                                        class="mt-1 block w-full"
                                        v-model="form.email"
                                    />

                                    <InputError
                                        class="mt-2"
                                        :message="form.errors.email"
                                    />
                                </div>

                                <div>
                                    <InputLabel for="address" value="Address" />

                                    <TextInput
                                        id="address"
                                        type="text"
                                        class="mt-1 block w-full"
                                        v-model="form.address"
                                    />

                                    <InputError
                                        class="mt-2"
                                        :message="form.errors.address"
                                    />
                                </div>

                                <div>
                                    <InputLabel for="city" value="City" />

                                    <TextInput
                                        id="city"
                                        type="text"
                                        class="mt-1 block w-full"
                                        v-model="form.city"
                                    />

                                    <InputError
                                        class="mt-2"
                                        :message="form.errors.city"
                                    />
                                </div>

                                <div>
                                    <InputLabel
                                        for="province"
                                        value="Province"
                                    />

                                    <TextInput
                                        id="province"
                                        type="text"
                                        class="mt-1 block w-full"
                                        v-model="form.province"
                                    />

                                    <InputError
                                        class="mt-2"
                                        :message="form.errors.province"
                                    />
                                </div>

                                <div>
                                    <InputLabel
                                        for="postal_code"
                                        value="Postal Code"
                                    />

                                    <TextInput
                                        id="postal_code"
                                        type="text"
                                        class="mt-1 block w-full"
                                        v-model="form.postal_code"
                                    />

                                    <InputError
                                        class="mt-2"
                                        :message="form.errors.postal_code"
                                    />
                                </div>
                            </div>

                            <h4 class="text-2xl font-bold text-center">
                                Product Information
                            </h4>
                            <hr
                                class="w-48 h-1 mx-auto bg-gray-100 border-0 rounded dark:bg-gray-700"
                            />

                            <div
                                class="grid gap-4 lg:grid-cols-3 md:grid-cols-2 grid-rows-1 my-5"
                            >
                                <div>
                                    <InputLabel
                                        for="products"
                                        value="Products"
                                    />

                                    <Multiselect
                                        :options="product_options"
                                        v-model="form.products"
                                        mode="tags"
                                    />

                                    <InputError
                                        class="mt-2"
                                        :message="form.errors.products"
                                    />
                                </div>
                            </div>

                            <h4 class="text-2xl font-bold text-center">
                                Service Information
                            </h4>
                            <hr
                                class="w-48 h-1 mx-auto bg-gray-100 border-0 rounded dark:bg-gray-700"
                            />

                            <div
                                class="grid gap-4 lg:grid-cols-3 md:grid-cols-2 grid-rows-1 my-5"
                            >
                                <div>
                                    <InputLabel
                                        for="services"
                                        value="Services Purchased"
                                    />

                                    <Multiselect
                                        :options="service_options"
                                        v-model="form.services"
                                        mode="tags"
                                    />

                                    <InputError
                                        class="mt-2"
                                        :message="form.errors.services"
                                    />
                                </div>

                                <div>
                                    <InputLabel
                                        for="payment_method"
                                        value="Paid"
                                    />

                                    <Multiselect
                                        :options="payment_method_options"
                                        v-model="form.payment_method"
                                    />

                                    <InputError
                                        class="mt-2"
                                        :message="form.errors.payment_method"
                                    />
                                </div>

                                <div>
                                    <InputLabel
                                        for="motor_warranty"
                                        value="Motor Warranty"
                                    />

                                    <Multiselect
                                        :options="motor_warranty_options"
                                        v-model="form.motor_warranty"
                                    />

                                    <InputError
                                        class="mt-2"
                                        :message="form.errors.motor_warranty"
                                    />
                                </div>

                                <div>
                                    <InputLabel
                                        for="frame_warranty"
                                        value="Frame Warranty"
                                    />

                                    <Multiselect
                                        :options="frame_warranty_options"
                                        v-model="form.frame_warranty"
                                    />

                                    <InputError
                                        class="mt-2"
                                        :message="form.errors.frame_warranty"
                                    />
                                </div>

                                <div>
                                    <InputLabel
                                        for="electronics_warranty"
                                        value="Electronics Warranty"
                                    />

                                    <Multiselect
                                        :options="electronics_warranty_options"
                                        v-model="form.electronics_warranty"
                                    />

                                    <InputError
                                        class="mt-2"
                                        :message="
                                            form.errors.electronics_warranty
                                        "
                                    />
                                </div>

                                <div class="col-span-2">
                                    <InputLabel
                                        for="comments"
                                        value="Comments"
                                    />

                                    <TextInput
                                        id="comments"
                                        type="text"
                                        class="mt-1 block w-full"
                                        v-model="form.comments"
                                    />

                                    <InputError
                                        class="mt-2"
                                        :message="form.errors.comments"
                                    />
                                </div>
                            </div>

                            <div class="flex items-center gap-2">
                                <PrimaryButton :disabled="form.processing">
                                    {{ edit_mode ? "Update" : "Save" }}
                                </PrimaryButton>

                                <Link :href="route('customer-account.index')">
                                    <DangerButton :disabled="form.processing">
                                        Cancel
                                    </DangerButton>
                                </Link>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
