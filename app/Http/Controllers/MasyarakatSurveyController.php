<?php

namespace App\Http\Controllers;

use App\Models\MasyarakatSurvey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MasyarakatSurveyController extends Controller
{
    /**
     * Display a listing of surveys.
     */
    public function index(Request $request)
    {
        $query = MasyarakatSurvey::with('user')->latest();
        
        if ($search = $request->get('search')) {
            $query->where(function ($q) use ($search) {
                $q->where('responden', 'like', "%{$search}%")
                  ->orWhere('tempat', 'like', "%{$search}%");
            });
        }
        
        $surveys = $query->paginate(10);
        
        return view('masyarakat.index', compact('surveys'));
    }

    /**
     * Show the form for creating a new survey.
     */
    public function create()
    {
        return view('masyarakat.create');
    }

    /**
     * Store a newly created survey.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'verifikator' => 'nullable|string|max:255',
            'responden' => 'nullable|string|max:255',
            'tempat' => 'nullable|string|max:255',
        ]);
        
        $validated['user_id'] = Auth::id();
        
        // Add all form fields
        $allFields = $request->except(['_token', '_method']);
        $survey = MasyarakatSurvey::create(array_merge($validated, $allFields));
        
        return redirect()
            ->route('masyarakat.show', $survey)
            ->with('success', 'Kuesioner Masyarakat berhasil disimpan!');
    }

    /**
     * Display the specified survey.
     */
    public function show(MasyarakatSurvey $masyarakat)
    {
        return view('masyarakat.show', compact('masyarakat'));
    }

    /**
     * Show the form for editing the survey.
     */
    public function edit(MasyarakatSurvey $masyarakat)
    {
        return view('masyarakat.edit', compact('masyarakat'));
    }

    /**
     * Update the specified survey.
     */
    public function update(Request $request, MasyarakatSurvey $masyarakat)
    {
        $validated = $request->validate([
            'verifikator' => 'nullable|string|max:255',
            'responden' => 'nullable|string|max:255',
        ]);
        
        $allFields = $request->except(['_token', '_method']);
        $masyarakat->update($allFields);
        
        return redirect()
            ->route('masyarakat.show', $masyarakat)
            ->with('success', 'Kuesioner Masyarakat berhasil diperbarui!');
    }

    /**
     * Remove the specified survey.
     */
    public function destroy(MasyarakatSurvey $masyarakat)
    {
        $masyarakat->delete();
        
        return redirect()
            ->route('masyarakat.index')
            ->with('success', 'Kuesioner Masyarakat berhasil dihapus!');
    }
}
