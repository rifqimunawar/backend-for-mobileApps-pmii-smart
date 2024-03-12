import { Link } from '@inertiajs/react'
import React from 'react'
import HeroComponent from '../components/HeroComponent'
import EventCardComponent from '../components/EventCardComponent'
import FooterComponent from '../components/FooterComponent'
import NavbarComponent from '../components/NavbarComponent'

export default function Home({ events }) {
  console.log(events)
  if (!events || events.length === 0) {
    return <div>No events available</div>
  }
  return (
    <div>
      <NavbarComponent />
      <div className="container mx-auto px-8 mt-10">
        <HeroComponent />
        <h1 className="mt-10 mb-5 card-title text-xl">Pilih Konser</h1>
        {/* Render EventCard for each event */}
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 mb-10 gap-5">
          {events.map((event) => (
            <Link href={'/event/' + event.id} key={event.id}>
              <EventCardComponent event={event} />
            </Link>
          ))}
        </div>
      </div>
      <FooterComponent/>
    </div>
  )
}
