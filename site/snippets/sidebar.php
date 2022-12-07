<div class="sidebar flex flex-column p-6 text-xs">
	<header class="mb-12">
		<h1 class="font-sans text-2xl mb-6">
			KQL
			<small class="version font-mono text-xs">v<?= Kirby::plugin('getkirby/kql')->version() ?></small>
		</h1>

		<p class="color-gray-400 mb-6">
			<a class="link" href="https://getkirby.com">Kirby</a>'s Query Language API combines the flexibility of Kirby's data structures, the power of GraphQL and the simplicity of REST.
		</p>

		<nav class="links">
			<a class="link" href="https://getkirby.com">Kirby CMS</a>
			<a class="link mb-6" href="https://getkirby.com/plugins/getkirby/kql">Documentation</a>
			<a class="link" href="https://github.com/getkirby/eleventykit">KQL + 11ty</a>
			<a class="link" href="https://nuxt-kql.jhnn.dev/">KQL + Nuxt</a>
		</nav>
	</header>

	<div class="examples flex-grow">
		<h2 class="font-bold mb-3">Example Queries</h2>
		<nav class="samples flex flex-column"></nav>
	</div>

	<button type="submit">Run Query</button>

</div>
