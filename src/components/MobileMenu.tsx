import { Popover, Transition } from "@headlessui/react";
import { Fragment } from "preact/jsx-runtime";

export function MobileMenu() {
  return (
    <Popover className="relative">
      {({ open }: { open: boolean }) => (
        <Fragment>
          <Popover.Button
            className={`absolute right-3 top-3 z-30 md:hidden ${
              open ? "text-white" : ""
            }`}
          >
            {open ? "Close" : "Menu"}
          </Popover.Button>

          <Transition
            show={open}
            enter="transition ease-out duration-300"
            enterFrom="transform opacity-0"
            enterTo="transform opacity-100"
            leave="transition duration-300 ease-out"
            leaveFrom="transform opacity-100"
            leaveTo="transform opacity-0"
          >
            <Popover.Panel className="z-10 pointer-events-auto w-screen h-screen bg-black text-white flex flex-col justify-between p-3">
              <div></div>
              <nav className="flex flex-col text-6xl gap-2">
                <a href="/">HOME</a>
                <a href="/work">WORK</a>
                <a href="/contact">CONTACT</a>
              </nav>
              <nav className="flex border-t border-t-white w-full gap-4 pt-3">
                <a href="/">GITHUB</a>
                <a href="/work">LINKEDIN</a>
              </nav>
            </Popover.Panel>
          </Transition>
        </Fragment>
      )}
    </Popover>
  );
}
