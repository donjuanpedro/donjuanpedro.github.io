import type { Metadata } from 'next';
import Link from 'next/link';

export const metadata: Metadata = {
  title: 'Work',
  description: 'A summary of my work and contributions.',
};

async function Stars() {
  let res = await fetch('https://api.github.com/repos/vercel/next.js');
  let json = await res.json();
  let count = Math.round(json.stargazers_count / 1000);
  return `${count}k stars`;
}

export default function WorkPage() {
  return (
    <section>
      <h1 className="font-medium text-2xl mb-8 tracking-tighter">my work</h1>
      <div className="prose prose-neutral dark:prose-invert">
        <p>
          I switched career paths in 2016 and never looked back. Here's a summary of my
          work so far.
        </p>
        <hr className="my-6 border-neutral-100 dark:border-neutral-800" />
        <h2 className="font-medium text-xl mb-1 tracking-tighter">Sunnova</h2>
        <p className="text-neutral-600 dark:text-neutral-400 text-sm">
          Frontend Developer | 2023 - Present
        </p>
        <p>
          Here I've been fortunate to take part in several critical initiatives using React.
        </p>
        <hr className="my-6 border-neutral-100 dark:border-neutral-800" />
        <h2 className="font-medium text-xl mb-1 tracking-tighter">ShiftKey</h2>
        <p className="text-neutral-600 dark:text-neutral-400 text-sm">
          Web Developer | 2022
        </p>
        <p>
          This position helped me to hone skills in Vue while managing a marketing site single-handedly.
        </p>
        <hr className="my-6 border-neutral-100 dark:border-neutral-800" />
        <h2 className="font-medium text-xl mb-1 tracking-tighter">Promises Behavioral Health</h2>
        <p className="text-neutral-600 dark:text-neutral-400 text-sm">
          Web Developer | 2021-2022
        </p>
        <p>
          Ten website rebuilds in less than six months pushed me to expand Wordpress knowlege and move beyond the CMS.
        </p>
        <hr className="my-6 border-neutral-100 dark:border-neutral-800" />
        <h2 className="font-medium text-xl mb-1 tracking-tighter">Lower Colorado River Authority</h2>
        <p className="text-neutral-600 dark:text-neutral-400 text-sm">
          Frontend Developer | 2016-2021
        </p>
        <p>
          My first web dev job - two site redesigns and one migration in just under five years.
        </p>
      </div>
    </section>
  );
}