import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Head, Link, usePage } from "@inertiajs/react";

export default function Feature({ feature, answer, children }) {
    const { auth } = usePage().props;

    const availableCredits = auth.user.available_credits;

    return (
        <AuthenticatedLayout
            user={auth.user}
            header={
                <h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {feature.name}
                </h2>
            }
        >
            <Head title="Feature 1" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    {answer !== null && (
                        <div className="mb-3 py-3 px-5 rounded text-white bg-emerald-600 text-xl">
                            result of calculation: {answer}
                        </div>
                    )}
                    <div className="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg relative">
                        {availableCredits !== null &&
                            feature.required_credits > availableCredits && (
                                <div className="absolute left-0 top-0 right-0 bottom-0 flex flex-col item-center justify-center bg-whşte/70 gap-3"></div>
                            )}
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
