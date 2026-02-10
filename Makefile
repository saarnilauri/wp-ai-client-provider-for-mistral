.PHONY: dist clean-dist

dist:
	./scripts/build-plugin-zip.sh

clean-dist:
	rm -rf dist
