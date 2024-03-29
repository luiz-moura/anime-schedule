import { Link } from '@inertiajs/react';

import ApplicationLogo from '@/Components/ApplicationLogo';

export default function Guest({ children }) {
    return (
        <div className="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-zinc-950">
            <div>
                <Link href={route('login')}>
                    <ApplicationLogo className="w-20 h-20 fill-current" />
                </Link>
            </div>

            <div className="w-full sm:max-w-md mt-6 px-6 py-4 bg-zinc-900 shadow-md overflow-hidden sm:rounded-lg">
                {children}
            </div>
        </div>
    );
}
