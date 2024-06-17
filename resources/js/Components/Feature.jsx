import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Head, Link, usePage } from "@inertiajs/react";

export default function Feature({ feature, answer, children }) {
    const { auth } = usePage().props;

    const availableCredits = auth.user.available_credits;
}
