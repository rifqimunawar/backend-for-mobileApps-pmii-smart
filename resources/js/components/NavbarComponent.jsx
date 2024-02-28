import React from "react";

export default function NavbarComponent() {
    return (
        <div className="bg-teal-800 ">
            <div className="navbar container mx-auto px-8">
                <div className="flex-1 ">
                    <img
                        src="https://1.bp.blogspot.com/-cLLPVsp6dNw/XnOPLSn374I/AAAAAAAAAWo/bYfiPw5JvWgbt6PBnZcxO-F2ZPvcJPrqgCLcBGAsYHQ/s1600/Logo%2BPMII.png"
                        alt="Gambar"
                        className="logo"
                    />
                </div>
                <div className="flex-none gap-2">
                    <div className="form-control">
                        <input
                            type="text"
                            placeholder="Search"
                            className="input input-bordered w-24 md:w-auto"
                        />
                    </div>
                    <div className="dropdown dropdown-end">
                        <div
                            tabIndex={0}
                            role="button"
                            className="btn btn-ghost btn-circle avatar"
                        >
                            <div className="w-10 rounded-full">
                                <img
                                    alt="Tailwind CSS Navbar component"
                                    src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg"
                                />
                            </div>
                        </div>
                        <ul
                            tabIndex={0}
                            className="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52"
                        >
                            <li>
                                <a className="justify-between">
                                    Profile
                                    <span className="badge">New</span>
                                </a>
                            </li>
                            <li>
                                <a>Settings</a>
                            </li>
                            <li>
                                <a>Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    );
}
