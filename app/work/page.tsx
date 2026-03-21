import type { Metadata } from 'next';
import Link from 'next/link';

export const metadata: Metadata = {
  title: 'Work',
  description: 'A summary of my work and contributions.',
};

function ArrowIcon() {
  return (
    <svg
      width="12"
      height="12"
      viewBox="0 0 12 12"
      fill="none"
      xmlns="http://www.w3.org/2000/svg"
    >
      <path
        d="M2.07102 11.3494L0.963068 10.2415L9.2017 1.98864H2.83807L2.85227 0.454545H11.8438V9.46023H10.2955L10.3097 3.09659L2.07102 11.3494Z"
        fill="currentColor"
      />
    </svg>
  );
}

export default function WorkPage() {
  return (
    <section>
      <div className="prose prose-neutral dark:prose-invert mb-12">
        <h2 className="font-medium text-xl mb-1 tracking-tighter">LPL Financial</h2>
        <p className="text-neutral-600 dark:text-neutral-400 text-sm">
          Senior Front-End Developer | 2025 - Present
        </p>
        <hr className="my-6 border-neutral-100 dark:border-neutral-800" />
        <h2 className="font-medium text-xl mb-1 tracking-tighter">Sunnova</h2>
        <p className="text-neutral-600 dark:text-neutral-400 text-sm">
          Front-End Developer | 2023 - 2025
        </p>
        <hr className="my-6 border-neutral-100 dark:border-neutral-800" />
        <h2 className="font-medium text-xl mb-1 tracking-tighter">ShiftKey</h2>
        <p className="text-neutral-600 dark:text-neutral-400 text-sm">
          Web Developer | 2022
        </p>
        <hr className="my-6 border-neutral-100 dark:border-neutral-800" />
        <h2 className="font-medium text-xl mb-1 tracking-tighter">Promises Behavioral Health</h2>
        <p className="text-neutral-600 dark:text-neutral-400 text-sm">
          Web Developer | 2021-2022
        </p>
        <hr className="my-6 border-neutral-100 dark:border-neutral-800" />
        <h2 className="font-medium text-xl mb-1 tracking-tighter">Lower Colorado River Authority</h2>
        <p className="text-neutral-600 dark:text-neutral-400 text-sm">
          Front-End Developer | 2016-2021
        </p>
      </div>
      <a
            className="flex items-center transition-all hover:text-neutral-800 dark:hover:text-neutral-100"
            rel="noopener noreferrer"
            target="_blank"
            href="https://github.com/donjuanpedro"
          >
            <ArrowIcon />
            <p className="ml-2 h-7">find me on github</p>
          </a>
    </section>
  );
}