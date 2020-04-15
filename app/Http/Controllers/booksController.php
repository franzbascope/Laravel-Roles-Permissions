<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatebooksRequest;
use App\Http\Requests\UpdatebooksRequest;
use App\Repositories\booksRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class booksController extends AppBaseController
{
    /** @var  booksRepository */
    private $booksRepository;

    public function __construct(booksRepository $booksRepo)
    {
        $this->booksRepository = $booksRepo;
    }

    /**
     * Display a listing of the books.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $books = $this->booksRepository->all();

        return view('books.index')
            ->with('books', $books);
    }

    /**
     * Show the form for creating a new books.
     *
     * @return Response
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created books in storage.
     *
     * @param CreatebooksRequest $request
     *
     * @return Response
     */
    public function store(CreatebooksRequest $request)
    {
        $input = $request->all();

        $books = $this->booksRepository->create($input);

        Flash::success('Books saved successfully.');

        return redirect(route('books.index'));
    }

    /**
     * Display the specified books.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $books = $this->booksRepository->find($id);

        if (empty($books)) {
            Flash::error('Books not found');

            return redirect(route('books.index'));
        }

        return view('books.show')->with('books', $books);
    }

    /**
     * Show the form for editing the specified books.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $books = $this->booksRepository->find($id);

        if (empty($books)) {
            Flash::error('Books not found');

            return redirect(route('books.index'));
        }

        return view('books.edit')->with('books', $books);
    }

    /**
     * Update the specified books in storage.
     *
     * @param int $id
     * @param UpdatebooksRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatebooksRequest $request)
    {
        $books = $this->booksRepository->find($id);

        if (empty($books)) {
            Flash::error('Books not found');

            return redirect(route('books.index'));
        }

        $books = $this->booksRepository->update($request->all(), $id);

        Flash::success('Books updated successfully.');

        return redirect(route('books.index'));
    }

    /**
     * Remove the specified books from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $books = $this->booksRepository->find($id);

        if (empty($books)) {
            Flash::error('Books not found');

            return redirect(route('books.index'));
        }

        $this->booksRepository->delete($id);

        Flash::success('Books deleted successfully.');

        return redirect(route('books.index'));
    }
}
