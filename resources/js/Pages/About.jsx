import { Link } from "@inertiajs/react";
import React from "react";

export default function About() {
    return (
        <div>
            About
            <Link href="/" className="font-bold">
                home
            </Link>
            <h1 className="text-3xl font-bold underline">Hello world!</h1>
        </div>
    );
}
