import Image from 'next/image';
import coffee from 'public/images/coffee.jpg';

export default function Page() {
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
  return (
    <>
    <section className="flex flex-col">
      <div className="flex-1">
        <h1 className="font-medium text-2xl mb-8 tracking-tighter">hi, I'm Walker 👋</h1>
        <p className="prose prose-neutral dark:prose-invert mb-4">
          I'm an Austin-based web developer, avid fly-fisherman, and amateur barbecue competitor. Other obsessions include American history between 1781-1818, songwriting, and literature.
        </p>
        <p className="prose prose-neutral dark:prose-invert mb-8">When I'm not writing code, you can find me camping, road-tripping, and navigating fatherhood.</p>
      </div>
      </section>
      <section className="flex flex-col mb-8">
      <div className="flex-1 h-40">
        <Image
              alt="Me waiting on tacos."
              src={coffee}
              priority
              className="rounded-lg object-cover"
            />
      </div>
    </section>
    <a
            className="flex items-center transition-all hover:text-neutral-800 dark:hover:text-neutral-100"
            rel="noopener noreferrer"
            target="_blank"
            href="https://github.com/donjuanpedro"
          >
            <ArrowIcon />
            <p className="ml-2 h-7">find me on github</p>
          </a>
    </>
  );
}
