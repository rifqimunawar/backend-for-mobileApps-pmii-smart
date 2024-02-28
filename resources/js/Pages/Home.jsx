import { Link } from "@inertiajs/react";
import React from "react";
import NavbarComponent from "../components/NavbarComponent";
import HeroComponent from "../components/HeroComponent";
import CardComponent from "../components/CardComponent";

export default function Home({ name }) {
    return (
        <div>
            <NavbarComponent />
            <div className="container mx-auto px-8 mt-10">
                <HeroComponent/>
                <h1 className="mt-10 mb-5 card-title text-xl">Pilih Konser</h1>
                <CardComponent/>
            </div>
            <Link href="/about">about</Link>
            <h4>{name}</h4>
        </div>
    );
}
