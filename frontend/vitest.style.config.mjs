// Angular/JSDOM startup can be slow on a memory-constrained development machine.
export default { test: { maxWorkers: 1, testTimeout: 15000, hookTimeout: 20000 } };
