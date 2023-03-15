/// <reference types="astro/client" />

interface ImportMetaEnv {
	readonly KIRBY_URL: string;
	readonly KIRBY_USERNAME: string;
	readonly KIRBY_PASSWORD: string;
}

interface ImportMeta {
	readonly env: ImportMetaEnv;
}
